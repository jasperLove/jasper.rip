body {
	margin: 600px;
	margin-top: 300px;
	font-family: monospace;
	font-size: 14px;
	line-height: 20px;
	text-size-adjust: 100%;
	height: 100%;
	overflow-y: hidden
}

a,
a:visited {
	color: #fce883;
	#text-shadow: 1px 1px 8px white;
	text-decoration: none;
}

a:hover {
	font-weight: bolder;
	transition: 130ms linear;
}

input,
input:focus {
	border: none;
	color: white;
	background: transparent;
	font-family: monospace;
	font-size: 14px;
	outline: none;
}

::selection {
	background: rgba(255, 255, 0, .3);
	padding: 3px;
}

hr {
	width: 15%;
	margin-left: 0px;
}

@keyframes fadeIn {
	0% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}

code,
.header {
	color: white;
	#text-shadow: 1px 1px 8px black;
	user-select: none;
}

.header {
	font-weight: bold;
}

.info {
    color: white;
	z-index: 1500;
	padding-left: 10px;
	padding-right: 60px;
	margin-left: 10px;
	border-left: 1px solid rgba(255, 255, 255, .4);
}

.info span {
	display: block;
}

#background1,
#background2,
#background-cover {
	margin: auto;
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
}

#background1 {
    background: no-repeat center center fixed url('../media/1.gif');
    z-index: -5;
    background-size: cover;
    image-rendering: pixelated;
    image-rendering: crisp-edges;
    image-rendering: optimize-contrast;
    image-rendering: optimizeSpeed;
    image-rendering: -moz-crisp-edges;
    image-rendering: -o-crisp-edges;
}

#background2 {
    background: no-repeat center center fixed url('../media/2.gif');
    z-index: -5;
    background-size: cover;
    image-rendering: pixelated;
    image-rendering: crisp-edges;
    image-rendering: optimize-contrast;
    image-rendering: optimizeSpeed;
    image-rendering: -moz-crisp-edges;
    image-rendering: -o-crisp-edges;
}

#background-cover {
	background-color: #1d1f21;
	opacity: 0.3;
	z-index: -1;
}

footer {
  text-align: left;
}