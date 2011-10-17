/* SyntaxHighlighter 3.0.83 (C) 2004-2010 Alex Gorbatchev http://alexgorbatchev.com/SyntaxHighlighter */
(function(){typeof(require)!="undefined"?SyntaxHighlighter=require("shCore").SyntaxHighlighter:null;function a(){var b="abstract assert boolean break byte case catch char class const continue default do double else enum extends false final finally float for goto if implements import instanceof int interface long native new null package private protected public return short static strictfp super switch synchronized this throw throws true transient try void volatile while";this.regexList=[{regex:SyntaxHighlighter.regexLib.singleLineCComments,css:"comments"},{regex:/\/\*([^\*][\s\S]*)?\*\//gm,css:"comments"},{regex:/\/\*(?!\*\/)\*[\s\S]*?\*\//gm,css:"preprocessor"},{regex:SyntaxHighlighter.regexLib.doubleQuotedString,css:"string"},{regex:SyntaxHighlighter.regexLib.singleQuotedString,css:"string"},{regex:/\b([\d]+(\.[\d]+)?|0x[a-f0-9]+)\b/gi,css:"value"},{regex:/(?!\@interface\b)\@[\$\w]+\b/g,css:"color1"},{regex:/\@interface\b/g,css:"color2"},{regex:new RegExp(this.getKeywords(b),"gm"),css:"keyword"}];this.forHtmlScript({left:/(&lt;|<)%[@!=]?/g,right:/%(&gt;|>)/g})}a.prototype=new SyntaxHighlighter.Highlighter();a.aliases=["java"];SyntaxHighlighter.brushes.Java=a;typeof(exports)!="undefined"?exports.Brush=a:null})();