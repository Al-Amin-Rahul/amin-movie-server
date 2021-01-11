<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    function insertSlider($request)
    {
        $slider =   new Slider();
        if($request->hasFile('slider_image'))
        {
            $image     = $request->file('slider_image');
            $directory = 'images/';
            $name      = 'IMG_'. date('Ymd_his') .'.'. $image->getClientOriginalExtension();
            $image->move($directory, $name);
            $imageUrl  = $directory.$name;

            $slider->title               =   $request->title;
            $slider->short_description   =   $request->short_description;
            $slider->active              =   $request->active;
            $slider->slider_image        =   $imageUrl;
            $slider->save();
            return;
        }

    }

    function updateSlider($request, $id)
    {
        $slider =   Slider::find($id);
        
        if($request->hasFile('slider_image'))
        {
            File::delete($slider->slider_image);

            $image      =   $request->file('slider_image');
            $directory  =   'images/';
            $name       =   "IMG_" . date('Ymd_his') . '.' .$image->getClientOriginalExtension();
            $image->move($directory, $name);
            $imageUrl   =   $directory.$name;
            
        }
        else
        {
            $imageUrl   =   $slider->slider_image;
        }

            $slider->title               =   $request->title;
            $slider->short_description   =   $request->short_description;
            $slider->active              =   $request->active;
            $slider->slider_image        =   $imageUrl;
            $slider->update();
            return;
    }
}
