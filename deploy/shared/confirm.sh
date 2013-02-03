echo -n "Really deploy? (y/n) "
read answer rest_of_input_is_ignored
case $answer in
	[yY]) echo; echo "Aye aye capt'n!"; echo;;
	*) echo "Aborted on user input."; exit 0;;
esac
