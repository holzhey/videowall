# videowall
A simple videowall POC using Javascript.

Just put a "birds.mkv" named file into the same folder and call "php crop.php" to split into 9 cropped parts.
The source video should have Full HD resolution. Then open videocropped.html to see the results.

The idea is to have multiple players synced by the master, all playing a cropped video from the main source. Tis allows for a videowall concept, since this ideia can be upgraded to much more elaborated results.

To do:

1) Make sure all players start at same time (some kind of previous sync event)
2) Better drift computing (exponential, big corrections, small=no corrections)
   (maybe here we can use the algo used in drones for stability error correction)
3) WebAssembly for performance?!?!?!
4) WebSocket to allow the players to be in different browsers
