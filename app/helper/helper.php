<?php
function uploadImage($request, $object)
{
    if ($request->hasFile('image')) {
        $file = $request->image;
        $newName = time() . "." . $file->getClientOriginalExtension();
        $file->move("images", $newName);
        $object->image = "images/$newName";
    }
}
