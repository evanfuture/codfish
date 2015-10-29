var lines = document.querySelectorAll('.line'), i;
var line_number = 0;

for (i = 0; i < lines.length; ++i) {
	line_number = i+1;
  lines[i].setAttribute('data-content', line_number );
}