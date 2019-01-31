<?php

require 'vendor/autoload.php';

$ffmpeg = FFMpeg\FFMpeg::create();
$video = $ffmpeg->open('birds.mkv');

$index = 1;
for ($row = 0; $row < 3; $row++) {
	for ($col = 0; $col < 3; $col++) {
		$video->filters()->crop(
			new FFMpeg\Coordinate\Point(0 + (300 * $col), 0 + (300 * $row)),
			new FFMpeg\Coordinate\Dimension(300, 300)
		);
		$format = new FFMpeg\Format\Video\X264('aac');
		$format->on('progress', function ($video, $format, $percentage) use ($index) {
			echo "Saving video $index: $percentage %     \r";
		});
		$video->save($format, 'birds' . $index . '.mp4');
		echo "Video $index, complete!\n";
		$index++;
	}
}