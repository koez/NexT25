$(document).ready(function(){
	$("#word_count").on('keyup',function(){
	var words = this.value.match(/\S+/g).length;
	if(word > 25){
		//split the string on first 25 words and rejoin them in spacs
		var trimmed = $(this).split(/\s+/,25).join(" ");
		//add a space to keep new typing making new words
		$(this).val(trimmed + " ");
	 }
	  else{
		('#display_count').text(words);
		('#word_left').text(200-words);
	}
   });
  });