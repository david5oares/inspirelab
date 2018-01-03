espaco = 15;
velocidade = 0.0;
tempo = 900.0;
alturaonda = 190.0;
var altura = [];
var w;
var dx;
function setup() {
waves = createCanvas(400, windowHeight, P2D);
    waves.parent("waves");
    w = width+16;
   dx = (TWO_PI / tempo) * espaco;
for (var i = 0; i < width; i++) {
    var amount = map(i, 0, width, 0, PI);
    altura[i] = w/espaco;
  }
 smooth();
    
}

function draw() {
background('#521865');
  calcWave();
  renderWave();
    console.log(altura.length);
}

function calcWave() {
    
   velocidade = velocidade+0.02;

  x = velocidade;

  for (var i = 0; i < altura.length; i++) {
    altura[i] = sin(x)*alturaonda;
    x+=dx;
     
  }
}

function renderWave() {
    noStroke();
  

    push();
    translate(-80,0);
  
    fill('#802564');
  for (var x = 0; x < altura.length; x++) {
    ellipse((x*1.1)*espaco, height/1.1+altura[x], 110, 400);
  }
    pop();
    fill('#fe8249');
for (var x = 0; x < altura.length; x++) {
    ellipse(x*espaco, height/1+altura[x], 200, 400);
  }
}