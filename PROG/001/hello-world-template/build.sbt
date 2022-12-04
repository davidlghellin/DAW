scalaVersion := "2.13.8"

lazy val root = (project in file(".")).
  settings(
    inThisBuild(List(
      organization := "es.david",
      scalaVersion := "2.12.10"
    )),
    name := "hello-world"
  )


libraryDependencies ++= Seq(
  "org.scalatest" %% "scalatest" % "3.2.2" % Test
)
libraryDependencies += "org.scalatest" %% "scalatest" % "3.2.14" % "test"
