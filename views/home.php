<!DOCTYPE html>
<html lang="en">
<?php 
    $title = "Latest";
    include "partials/header.php";

    $movieName = "Dune";
    $rating = 8.9;
    $runtime = 82;
    $converted_genres = "Action, Adventure, Drama";
    $year = 2021;
    $summary = "A noble family becomes embroiled in a war for control in a war for control over the galaxy's most valuable asset while it's heir becomes troubled by visions of a dark future.";

    include "components/BigBButton.php";
?>
<body>
    <?php include "partials/navbar.php"; ?>
    <main class="bg-home-featured overflow-hidden relative h-screen w-full bg-cover font-scope-regular">
        <div class="absolute w-full h-full top-0 left-0 bottom-0 right-0 z-0 bg-gradient-to-b from-gray-50/0 to-black/75"></div>
        <div class="container mx-auto grid grid-flow-row lg:grid-flow-col absolute w-full bottom-0 left-0 right-0 z-10">
            <div class="content p-4 md:p-10 text-scope-white">
                <h1 translate="no" class="text-6xl md:text-8xl font-scope-medium"><?php echo $movieName; ?></h1>
                <div class="rating flex items-center mt-4">
                    <i class="bi bi-star-fill text-scope-gold"></i>
                    <p class="text-lg md:text-xl font-scope-medium ml-1"><?php echo $rating; ?></p>
                    <p class="runtime ml-7 text-xs md:text-base"><?php echo $runtime; ?>m</p>
                    <p class="mx-3">•</p>
                    <p class="text-xs md:text-base"><?php echo $converted_genres; ?></p>
                    <p class="mx-3">•</p>
                    <p><?php echo $year; ?></p>
                </div>
                <p class="text-sm md:text-base summery mt-4 text-scope-white"><?php echo $summary; ?></p>
                <div class="flex items-center space-x-2 md:space-x-7 mt-12">
                    <?php BigBButton("Play", true, "max-h-[3rem] md:max-h-[3.85rem] bg-scope-blue text-scope-white"); BigBButton("Trailer", false, "max-h-[3rem] md:max-h-[3.85rem] h-[3.85rem] bg-gray-200 bg-opacity-10 text-scope-white"); ?>
                </div>
            </div>
            <div class="details text-scope-white p-4 md:p-10">
                <h3 class="text-base md:text-3xl">Posters</h3>
                <ul class="flex items-center space-x-2 md:space-x-6 mt-2 md:mt-4">
                    <img class="object-cover h-20 md:h-28 w-auto md:w-48 rounded-md" src="assets/images/dune/screenplays/sc1.jpg" alt="Screen Play One">
                    <img class="object-cover h-20 md:h-28 w-auto md:w-48 rounded-md" src="assets/images/dune/screenplays/sc2.jpeg" alt="Screen Play One">
                    <img class="object-cover h-20 md:h-28 w-auto md:w-48 rounded-md" src="assets/images/dune/screenplays/sc3.jpeg" alt="Screen Play One">
                    <img class="object-cover h-20 md:h-28 w-auto md:w-48 rounded-md" src="assets/images/dune/screenplays/sc4.jpeg" alt="Screen Play One">
                </ul>
                <h3 class="mt-6 md:mt-14 text-base md:text-3xl">Actors</h3>
                <ul class="flex items-center space-x-2 md:space-x-4 mt-2 md:mt-4">
                    <img class="object-cover h-10 md:h-14 w-10 md:w-14 rounded-full grayscale" src="assets/images/dune/actors/ac1.jpeg" alt="Actor One">
                    <img class="object-cover h-10 md:h-14 w-10 md:w-14 rounded-full grayscale" src="assets/images/dune/actors/ac2.jpeg" alt="Actor One">
                    <img class="object-cover h-10 md:h-14 w-10 md:w-14 rounded-full grayscale" src="assets/images/dune/actors/ac3.jpg" alt="Actor One">
                    <img class="object-cover h-10 md:h-14 w-10 md:w-14 rounded-full grayscale" src="assets/images/dune/actors/ac4.jpeg" alt="Actor One">
                    <img class="object-cover h-10 md:h-14 w-10 md:w-14 rounded-full grayscale" src="assets/images/dune/actors/ac5.jpg" alt="Actor One">
                </ul>
            </div>
        </div>
    </main>
</body>
</html>