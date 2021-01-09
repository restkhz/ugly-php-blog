//This script adapts from www.ruanyifeng.com


function CommentQuote(v,f) {


window.location.href=window.location.href+"#comment_text";

string=document.forms["comment_form"].comment.value;
string2=ignoreSpaces(RemoveHTML(RemoveBlockquote(document.getElementById(v).innerHTML)));
document.forms["comment_form"].comment.value="[blockquote]\n"+f+" said :\n"+string2+"\n[/blockquote]\n\n"+string;

return true;
}

function ignoreSpaces(string) {
var temp = "";
string = '' + string;
splitstring = string.split("  "); //双引号之间是个空格；
for(i = 0; i < splitstring.length; i++)
temp += splitstring[i];
return temp;
}

function RemoveBlockquote(strText)
{
 var regEx = /<blockquote>(.|\n|\r)*<\/blockquote>/ig;
 regEx.multiline=true;
 return strText.replace(regEx, "");
}

function RemoveHTML(strText)
{
 var regEx = /<[^>]*>/g;
 return strText.replace(regEx, "");
}
