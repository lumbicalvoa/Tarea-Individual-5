Ejercicio
Haciendo uso de los conceptos explicados anteriormente diseñe dos nuevas clases derivadas de la clase
“Animal” (similar a la clase “Ave”). Luego diseñe tres clases derivadas, usted escoja de cuál de las dos
nuevas clases derivadas de “Animal”. Asigne a esas tres últimas clases derivadas tres atributos propios de
cada clase.

<?php
class Animal{
    int numPatas;
    Animal (){
      numPatas=4;
    }
    int getNumPatas (){
      return (numPatas);
    }
  }
   
  class Mamifero extends Animal{
    Mamifero (){
      numPatas=4;
    }
  }
   
  class Humano extends Mamifero{
    Humano (){
      numPatas=2;
    }
  }
   
  class Perro extends Mamifero{
    Perro (){}
    void ladra (){
      System.out.println ("RRRRR");
    }
  }
   
  class Bulldog extends Perro{
    Bulldog (){}
  }
   
  Bulldog miPerro = new Bulldog ();
  miPerro.ladra(); 
  int numPatas = miPerro.getNumPatas(); 
  Humano yo = new Humano ();
  yo.getNumPatas (); 

  class Sinraza extends Perro{
    Sinraza (){}
  }
   
  Sinraza miPerro = new Sinraza ();
  miPerro.ladra(); 
  int numPatas = miPerro.getNumPatas(); 
  Humano yo = new Humano ();
  yo.getNumPatas (); 

  class Aleman extends Perro{
    Aleman (){}
  }
   
  Aleman miPerro = new Aleman ();
  miPerro.ladra(); 
  int numPatas = miPerro.getNumPatas(); 
  Humano yo = new Humano ();
  yo.getNumPatas (); 

?>