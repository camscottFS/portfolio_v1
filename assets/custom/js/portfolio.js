$(document).ready(function(){
  $("#nits").click(function(){
    $(".portfolio-header").html("<h2>Network & I.T. Solutions</h2>");
    $(".portfolio-p").html("<p>This is the first professional commerical website that I built while I was an intern at Network & I.T. Solutions. It's a static design using HTML5, CSS3 and Bootstrap.</p>");
    $("ol").html('<li>HTML5</li><li>CSS3</li><li>Bootstrap <span class="label label-info">Framework</span></li>');
    $('.portfolio img').attr('src','../assets/custom/images/portfolio/display/1.png');
    $('.link').attr('href','http://westfieldcomputers.com').attr('target',"_blank");
  });
  $("#fbgs").click(function(){
    $(".portfolio-header").html("<h2>FINDBATTLEGROUNDS</h2>");
    $(".portfolio-p").html("<p>This application was my final project before I graduated from Full Sail University. It's the first recruitment platform for the popular game UNKNOWNPLAYER'S BATTLEGROUNDS, available on Steam. It is built with CodeIgniter, the IonAuth Authentication library for CodeIgniter, Bootstrap, HTML5, CSS3, and some jQuery. I am currently re-designing the website.</p>");
    $("ol").html('<li>HTML5</li><li>CSS3</li><li>Bootstrap <span class="label label-info">Framework</span></li><li>CodeIgniter <span class="label label-info">Framework</span></li><li>IonAuth <span class="label label-primary">Library</span></li><li>jQuery <span class="label label-primary">Library</span></li>');
    $('.portfolio img').attr('src','../assets/custom/images/portfolio/display/2.png');
    $('.link').attr('href','https://findbattlegrounds.com').attr('target',"_blank");
  });
  $("#myovpn").click(function(){
    $(".portfolio-header").html("<h2>MyOVPN</h2>");
    $(".portfolio-p").html("<p>MyOVPN is a VPN business that I helped design & develop both front and back-end, it is built on CodeIgniter, HTML5, CSS3, Bootstrap, and uses WHMCS and its API. It is currently still in development.</p>");
    $("ol").html('<li>HTML5</li><li>CSS3</li><li>Bootstrap <span class="label label-info">Framework</span></li><li>CodeIgniter <span class="label label-info">Framework</span></li><li>WHMCS <span class="label label-warning">Tool</span> <span class="label label-success">API</span></li>');
    $('.portfolio img').attr('src','../assets/custom/images/portfolio/display/3.png');
    $('.link').attr('href','#').attr('target',"_self");
  });
});
