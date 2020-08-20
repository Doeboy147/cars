<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use function pathinfo;
use const PATHINFO_EXTENSION;
use const PATHINFO_FILENAME;
use function public_path;

class ResizeImageThumb implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $imagePath;

    public function __construct($imagePath)
    {
        $this->imagePath = $imagePath;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $path = 'images/uploads/thumbs/';
        /*if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }*/

        $filename  = pathinfo($this->imagePath, PATHINFO_FILENAME);
        $extension = pathinfo($this->imagePath, PATHINFO_EXTENSION);
        $filePath  = $path . $filename . '.' . $extension;


        $container = Image::canvas(300, 300);

        $image = Image::make($this->imagePath);

        $image->resize(null, 190, function ($constraint) {
            $constraint->aspectRatio();
        });


        $container->insert($image, 'center');
        $container->save(public_path($filePath));

        $image->destroy();
        $container->destroy();
    }
}
