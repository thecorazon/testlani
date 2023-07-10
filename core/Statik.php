<?php



class Statik
{
    public static function cekGambar($imageName, $directory)
    {
        $imagePath = $directory . '/' . $imageName;

        if (file_exists($imagePath) && $imageName != null) {
            $imageName = $imageName;
        } else{
            $imageName = 'default_gambar.jpg';
        }

        return $imageName;
    }
}