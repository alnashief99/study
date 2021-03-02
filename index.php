<?php include 'header.php'; ?>
<div cx="100" cy="200" r="120" stroke="yellow" stroke-width="10" fill="black">
<h1 class="picture" >
    
    <svg height="400px" width="250" >
    <defs>
        <clipPath  id="myCircle">
    <circle  position  cx="100" cy="200" r="100" stroke="yellow" stroke-width="30" fill="black">
    </circle>
    </defs>
    <image style="z-index: -1"  height="400px" width="250" href="img/nash.jpg" clip-path="url(#myCircle)" />
      </svg>
</h1>
</div>
<h5 align="center" class="name" style="margin-top: 13%; color: white; font-family:monospace " > Mohammad, Al-Nashief S.</h5>

<?php include 'footer.php'; ?>