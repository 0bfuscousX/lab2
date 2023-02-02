// Photo Flip
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
  <img id="myImg" src="https://scontent.fmnl25-1.fna.fbcdn.net/v/t39.30808-6/281070084_1705209123162396_4163083173256478633_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFGJt4nDRmXT6k78YTa0QYPcbZWgt_WpCRxtlaC39akJNkEZuAGzhOP6UT22lUvXpKVtiXBfLZkHi-0f1fRZ78x&_nc_ohc=uGC4ZMtJmD8AX_Zwv1e&_nc_ht=scontent.fmnl25-1.fna&oh=00_AfBMmMV7j1PHryKfKWRtwv7uqFvjgP0kWkH1zsC3oz0tTA&oe=63D3FD9D" alt="ØbfuscousX" style="float:right;width:auto;height:450px;">
	<!-- The Modal -->
	 <div id="myModal" class="modal">
  	<span class="close">&times;</span>
  	 <img class="modal-content" id="img01">
