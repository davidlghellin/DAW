package es.david

/**
 * @author 
 */
object App {
  
  def foo(x : Array[String]) = x.foldLeft("")((a,b) => a + b)
  
  def main(args : Array[String]) = Unit {

    val noUso = "Esta variable es para que lo detecte el sonar"

    println( "Hello World!" )
    println("concat arguments = " + foo(args))
  }

}
