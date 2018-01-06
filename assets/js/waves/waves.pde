int espaco = 60;
float velocidade = 0.0;
float tempo = 900.0;
float alturaonda = 190.0;
float[] altura;
int w;
float dx;
PImage generate, circle;
void setup() {
size (720, 405);
    w = width+60;
   dx = (TWO_PI / tempo) * espaco;
altura = new float[w/espaco];
  

    
}

void draw() {
background(#521865);
  calcWave();
  renderWave();
   

}

void calcWave() {
    
   velocidade = velocidade+0.05;

 float x = velocidade;

  for (int i = 0; i < altura.length; i++) {
    altura[i] = sin(x)*alturaonda;
    x+=dx;
     
  }
}

void renderWave() {
    noStroke();
  

    pushMatrix();
    translate(-40,0);
  
    fill(100,50,100);
  for (int x = 0; x < altura.length; x++) {
    ellipse(x*espaco, height/1.1+altura[x], 110, 400);
   
    println(x*espaco);
  }
    popMatrix();
    fill(#fe8249);

for (int x = 0; x < altura.length; x++) {
    ellipse(x*espaco, height/1.1+altura[x], 110, 400);
  }
}