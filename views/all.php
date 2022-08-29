<!DOCTYPE html>
<html lang="en">
<?php
    $title = "All";
    $featured_video_path = '/ScopeMovie/assets/videos/Dune_Teaser.mp4'; 
    include "partials/header.php";
    if (file_exists(ROOTPATH.'/assets/videos/Dune_Main_Trailer.mp4')) {
        echo "File Exists";
    } else echo ROOTPATH . ' /ScopeMovie/assets/videos/Dune_Main_Trailer.mp4';
?>
<body>
    <?php include "partials/navbar.php"; ?>
    <main class="w-full h-screen bg-gradient-to-b from-slate-900 to-black pt-20">
        <div class="grid grid-cols-3 h-3/5">
            <div class="col-span-2 border border-red-500">
                <video src="<?php echo $featured_video_path; ?>" class="border border-white rounded-2xl" loop autoplay></video>
            </div>
            <div class="col-span-1 border border-green-400"></div>
        </div>
    </main>
</body>
</html>