<?php namespace App\Http\Controllers;
use App\ProductImage;
use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;
use Request;
use Session;
class UploadController extends Controller {
    public function product_image() {
        // getting all of the post data
        $file = array('image' => Input::file('image'));
        // setting up rules
        $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
        // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return Redirect::back()->withInput()->withErrors($validator);
        }
        else {
            // checking file is valid.
            if (Input::file('image')->isValid()) {
                $destinationPath = 'uploads'; // upload path
                $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                $product_id = Input::get('product_id'); // product id
                Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
                // sending back with message
                $product_image = new ProductImage;
                $product_image->product_id = $product_id;
                $product_image->filename = $fileName;
                $product_image->path = $fileName;
                $product_image->size = $fileName;
                $product_image->extension = $fileName;
                $product_image->mimetype = $fileName;
                $product_image->user_id = 1;
                $product_image->is_active = 1;
                $product_image->save();

                Session::flash('success', 'Upload successfully');
                return Redirect::back();
            }
            else {
                // sending back with error message.
                Session::flash('error', 'uploaded file is not valid');
                return Redirect::back();
            }
        }
    }
}