



void setup() {
  size(720, 510);
}


void draw() {
    p1();
}

void p1() {

  noStroke();
  background(140, 195, 73);


  //------------------------------------- Base Militar

  noStroke();
  fill(99, 99, 99);
  stroke(0, 0, 0);
  rect(65.6, 61, 386, 178.2);
  fill(70, 70, 70);
  rect(65.6, 250.6, 251, 46);
  fill(37, 37, 37);
  rect(77.1, 61, 374.5, 46);
  fill(70, 70, 70);
  rect(316.6, 204.6, 135, 46);
  rect(65.6, 61, 11.5, 178.2);
  rect(440.1, 61, 11.5, 132.2);
  rect(305.1, 204.6, 11.5, 34.5);
  rect(65.6, 49.5, 386, 11.5);
  rect(305.1, 193.1, 146.5, 11.5);
  rect(65.6, 239.1, 251, 11.5);


  //------------------------------------- Mesa


  fill(141, 110, 98);
  stroke(0, 0, 0);
  rect(136.5, 126.3, 36.5, 58.6);
  fill(121, 85, 73);
  rect(136.5, 184.9, 4.8, 24.6);
  rect(168.1, 184.9, 4.8, 24.6);
  fill(109, 76, 66);
  rect(136.5, 182.4, 36.5, 2.6);
  fill(235, 235, 235);
  rect(145.1, 146.8, 19.3, 10.7);
  rect(143.3, 143.6, 19.3, 10.7);

  //-------------------------------------Soldado

  noFill();
  stroke(0, 0, 0);
  beginShape();
  vertex(108.6, 168.8);
  bezierVertex(108.6, 168.8, 103.4, 174.1, 103.7, 181.2);
  endShape();
  beginShape();
  vertex(107.8, 167.8);
  bezierVertex(107.8, 167.8, 115.6, 180.3, 112.5, 183.9);
  endShape();
  fill(104, 159, 56);
  beginShape();
  vertex(115.2, 156.8);
  bezierVertex(115.2, 156.8, 122.6, 170.5, 115.5, 171);
  bezierVertex(108.4, 171.5, 103.4, 170.6, 98.7, 169.5);
  bezierVertex(94.1, 168.3, 102.2, 155.2, 106.6, 155.2);
  bezierVertex(111.1, 155.2, 115.2, 156.8, 115.2, 156.8);
  endShape();
  fill(248, 206, 128);
  beginShape();
  vertex(120, 142.9);
  bezierVertex(120, 142.9, 122.3, 159.7, 111.7, 159.1);
  bezierVertex(101.1, 158.5, 100.8, 155.8, 100.8, 142.9);
  bezierVertex(100.8, 130, 120, 142.9, 120, 142.9);
  endShape();
  fill(104, 159, 56);
  beginShape();
  vertex(112.7, 135.4);
  bezierVertex(119.8, 137.4, 124.8, 141.4, 124, 144.2);
  bezierVertex(123.2, 147.1, 116.8, 147.8, 109.7, 145.8);
  bezierVertex(102.7, 143.8, 97.6, 139.8, 98.4, 136.9);
  bezierVertex(99.2, 134.1, 105.6, 133.4, 112.7, 135.4);
  endShape();
  fill(0);
  ellipse(105, 150.6, 1.1, 1.8);
  noFill();
  line(108.3, 146.3, 103.9, 146.9);
  beginShape();
  vertex(107.7, 176.7);
  bezierVertex(107.7, 176.7, 118.3, 164, 110.4, 162.4);
  endShape();
  fill(248, 206, 128);
  ellipse(108.3, 176.7, 2.9, 2.3);
  fill(109, 76, 66);
  beginShape();
  vertex(114.7, 182.1);
  vertex(115, 185.9);
  vertex(106, 185.6);
  bezierVertex(106, 185.6, 106.9, 182.3, 109.4, 182.1);
  bezierVertex(111.9, 181.8, 114.7, 182.1, 114.7, 182.1);
  endShape();
  beginShape();
  vertex(105, 180.1);
  vertex(105.3, 183.9);
  vertex(96.3, 183.6);
  bezierVertex(96.3, 183.6, 97.2, 180.4, 99.7, 180.1);
  bezierVertex(102.2, 179.9, 105, 180.1, 105, 180.1);
  endShape();
  noFill();
  beginShape();
  vertex(112.1, 149.9);
  bezierVertex(112.1, 149.9, 114.3, 147.6, 115.5, 150.6);
  bezierVertex(116.8, 153.5, 112.1, 153.9, 112.1, 153.9);
  endShape();

  //---------------------------------------------------broken wall

  beginShape();
  vertex(198.4, 261.4);
  vertex(207.6, 270.8);
  vertex(223.4, 271.9);
  vertex(221.5, 277.3);
  vertex(231.7, 277.3);
  vertex(242.3, 285.3);
  endShape();

  beginShape();
  vertex(231.7, 269.9);
  vertex(243.6, 271.9);
  vertex(247.5, 265.1);
  vertex(263.4, 268.5);
  endShape();

  beginShape();
  vertex(223.8, 255.7);
  vertex(235.1, 261.4);
  vertex(215.9, 261.2);
  vertex(225.4, 266.8);
  endShape();

  beginShape();
  vertex(200, 280.8);
  vertex(211.4, 285.3);
  vertex(213.8, 278.8);
  vertex(216, 286);
  vertex(228.5, 287.9);
  vertex(231.7, 283.3);
  endShape();
}