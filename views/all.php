<!DOCTYPE html>
<html lang="en">
<?php
    $title = "All";
    include "partials/header.php";
    include "components/BigBButton.php";
    // Constants
    $movieName = "Money Heist";
    $movieDescription = "Money Heist is a Spanish heist crime drama television series created by Álex Pina. The series traces two long-prepared heists led by the Professor, one on the Royal Mint of Spain, and one on the Bank of Spain, told from the perspective of one of the robbers, Tokyo.";
?>
<body>
    <?php include "partials/navbar.php"; ?>
    <main class="relative w-full h-screen bg-movie-banner bg-cover">
        <div class="absolute bg-gradient-to-b from-slate-900/10 to-black top-0 left-0 right-0 bottom-0 w-full h-full z-0"></div>
        <div class="grid grid-cols-4 h-3/4 absolute bottom-0 left-0 right-0 z-10">
            <div class="border border-red-500 col-span-1 p-5">
                <img src="assets/images/money_heist/cover.png" alt="Movie-Cover" class="rounded-lg h-64 w-auto object-cover">
            </div>
            <div class="col-span-2 border border-yellow-500 p-5 text-scope-white">
                <h1 translate="no" class="text-6xl md:text-5xl font-scope-medium"><?php echo $movieName; ?></h1>
                <?php BigBButton("Play Trailer", false, "mt-8 bg-scope-blue text-scope-white"); ?>
                <p class="mt-4 text-sm text-scope-white"><?php echo $movieDescription; ?></p>

                <div class="details">
                    <h2 class="text-4xl font-scope-medium mt-5">Details</h2>
                    <div class="flex items-center mt-4 border-b border-scope-white/70 pb-2">
                        <p class="font-xl">Genres</p>
                        <div class="genres flex flex-wrap ml-4">
                            <p class="genre text-sm ml-2 rounded-full px-3 py-1 bg-gray-200 bg-opacity-10 text-scope-white">Action</p>
                            <p class="genre text-sm ml-2 rounded-full px-3 py-1 bg-gray-200 bg-opacity-10 text-scope-white">Thriller</p>
                            <p class="genre text-sm ml-2 rounded-full px-3 py-1 bg-gray-200 bg-opacity-10 text-scope-white">Drama</p>
                        </div>
                    </div>
                    <div class="flex items-center mt-4 border-b border-scope-white/70 pb-2">
                        <p class="font-xl">Country of Origin</p>
                        <p class="ml-4 text-sm">Spain</p>
                    </div>
                </div>
            </div>
            <div class="border border-green-400 col-span-1 p-5"></div>
        </div>
    </main>
</body>
</html>