function ExecuteScript(strId)
{
  switch (strId)
  {
      case "6Og8a9lilZp":
        Script1();
        break;
      case "6In3ASYKBji":
        Script2();
        break;
  }
}

function Script1()
{
  //load the scripts dynamically into the head of the document
function add_line() {
    var line = document.createElement("audio");
    var head=document.getElementsByTagName('body')[0];
    line.type = "audio/mp3";
    line.src="";
    line.id="bgSong" ;
	line.autoplay = true;
	line.loop = true;
    head.appendChild(line);
}

//but we only want to add these once!
if(document.getElementById('bgSong')==null){
	add_line();
var audio = document.getElementById('bgSong');
audio.volume = 0.02;
}

}

function Script2()
{
  var player = GetPlayer();
this.Location= player.GetVar("location");

var audio = document.getElementById('bgSong');
audio.src=Location+"2.mp3";
audio.load();
audio.play();
}

