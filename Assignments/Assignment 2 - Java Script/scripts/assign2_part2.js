var slideimages =['images/juve.png',
                    'images/ManU.png',
                    'images/barca.png',
                    'images/dodge.png',
                    'images/bentli.jpg' ];
var slidelinks = [ "https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Juventus_FC_2017_icon_%28black%29.svg/1200px-Juventus_FC_2017_icon_%28black%29.svg.png",
                   "https://assets.manutd.com/AssetPicker/images/0/0/11/201/772402/Manchester_United_Crest_Comp_180x1801550591475296.png",
                   "https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/1200px-FC_Barcelona_%28crest%29.svg.png",
                   "https://medias.fcacanada.ca/jellies/renditions/2021/800x510/CC21_LADX22_2DN_PSE_APA_XXX_XXX_XXX.ae7f028c54c83c783d629b32e73484d3.png",
                   "https://upload.wikimedia.org/wikipedia/commons/9/93/2019_Bentley_Continental_GT_Automatic_6.0.jpg"
                 ];
function gotoshow() {
if (!window.winslide || winslide.closed)
winslide=window.open(slidelinks[index]);
else
winslide.location=slidelinks[index];
winslide.focus();
}
var slideshowspeed=500;
var index=0;
function slideit() {
index++;
if(index==slideimages.length) { index = 0; }
document.getElementById('slider').src = slideimages[index];
setTimeout("slideit()",slideshowspeed);
}