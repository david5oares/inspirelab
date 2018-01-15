int espaco = 15;
float velocidade = 0.0;
float tempo = 1800.0;
float alturaonda = 95.0;
float[] altura;
int w;
float dx;
PImage circle, circle1, circle2;
void setup() {
size (1020, 405);
    w = width+18;
   dx = (TWO_PI / tempo) * espaco;
altura = new float[w/espaco];
    smooth();

  circle1 = loadImage("assets/js/circle1.png");
  circle2 = loadImage("assets/js/circle2.png");
    imageMode(CENTER);
}

void draw() {
background(#521865);
  calcWave();
  renderWave();
}

void calcWave() {
    
   velocidade = velocidade+0.007;

 float x = velocidade;

  for (int i = 0; i < altura.length; i++) {
    altura[i] = sin(x)*alturaonda;
    x+=dx;
     
  }
}

void renderWave() {
    noStroke();
    
fill(#802564);
    pushMatrix();
    translate(-5,15);
    scale(1.15,0);
    
  for (int x = 0; x < altura.length; x++) {
    ellipse(x*espaco, height/1.1+altura[x], 210, 360);
  }
    popMatrix();
    
     fill(#fb4a56);
pushMatrix();
    translate(-10,15);
    scale(1.11,0);
   
  for (int x = 0; x < altura.length; x++) {
    //image( circle1, x*espaco, height/1.08+altura[x], 350,500);
    ellipse(x*espaco, height/1.045+altura[x], 310, 340);
    
  }
popMatrix();
    fill(#fe8249);
pushMatrix();
    scale(1,1);
    translate(0,25);
    
for (int x = 0; x < altura.length; x++) {
    
    ellipse(x*espaco, height/1+altura[x], 250, 300);
  }
popMatrix();
}