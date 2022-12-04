import org.scalatest.flatspec.AnyFlatSpec

class MatesSpec extends AnyFlatSpec {
   "Mates multiplica" should "good" in {
    assert(Mates.multiplica(2,2) == 4)
  }

}
