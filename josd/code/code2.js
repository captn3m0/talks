function test_basename (path){
	if(basename('/etc/passwd') !== 'passwd'){
		return false
	}
	return true;
}

function basename(path){
	if(path.substr(0,7)!=='http://')
		throw new Error("Invalid path")
	var pieces = path.split('/');
	return pieces[pieces.length -1];
}

console.log(basename('http://twitter.com/elonmusk'))
console.log(basename('/etc/passwd'))