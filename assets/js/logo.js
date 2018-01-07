void setup(){
 size(70,75);
smooth();
}

void draw(){
background(0,0);
noFill();
strokeWeight(4);
strokeCap(ROUND);
stroke(0);
arc(37, 21, 30, 30,PI-QUARTER_PI, TWO_PI+QUARTER_PI);
line(29,33,29,40);
line(45,33,45,40);
line(44,46,29,46);
line(44,46,29,46);
line(44,52,29,52);
line(40,58,33,58);
strokeWeight(3.5);
line(37,21,37,40);
strokeWeight(2);
line(33,24,29,27);
line(33,21,26,21);
line(41,21,47,21);
line(41,24,44,27);
line(37,17,37,14);
line(40,18,44,14);
line(33,18,29,13);
fill(0);
strokeWeight(0);
text("InspireLAB",9,72);

}