<?php
$page_title = 'Pacific Trails Resort :: Activities';
include('includes/header.html');
?>

<h2>Activities at Pacific Trails</h2>
<img src="trail.jpg" alt="A tranquil view of a yurt among trees.">
<h3>Hiking</h3>
<p>Pacific Trails Resort has 5 miles of hiking trails and is adjacent
    to a state park. Go it alone or join one of our guided hikes.</p>
<h3>Kayaking</h3>
<p>Ocean kayaks are available for guest use.</p>
<h3>Bird Watching</h3>
<p>While anytime is a good time for bird watching at Pacific Trails,
    we offer guided birdwatching trips at sunrise several times a week.</p>

<div id="gallery">
    <figure>
        <img src="photo2.jpg" width="200" height="150" alt="rocky coastline">
    </figure>
    <ul>
        <li><a href="photo1.jpg"><img src="photo1thumb.jpg" width="100" height="75" alt="Golden Gate Bridge">
                <span><img src="photo1.jpg" width="200" height="150" alt="Golden Gate Bridge"><br>Golden Gate
                    Bridge</span></a>
        </li>
        <li><a href="photo2.jpg"><img src="photo2thumb.jpg" width="100" height="75" alt="rocky coastline">
                <span><img src="photo2.jpg" width="200" height="150" alt="Rocky coastline"><br>Rocky Coastline</span></a>
        </li>
        <li><a href="photo3.jpg"><img src="photo3thumb.jpg" width="100" height="75" alt="clouds moving in on the coast">
                <span><img src="photo3.jpg" width="200" height="150" alt="clouds moving in on the coast"><br>Clouds Moving
                    in on the Coast</span></a>
        </li>
        <li><a href="photo4.jpg"><img src="photo4thumb.jpg" width="100" height="75" alt="waterfall near Big Sur">
                <span><img src="photo4.jpg" width="200" height="150" alt="waterfall near Big Sur"><br>Waterfall Near Big
                    Sur</span></a>
        </li>
    </ul>
</div>

<?php
include('includes/footer.html');
?>