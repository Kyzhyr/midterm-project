<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use src\MidtermProject;
use src\Sales;
use src\Users;

class MidtermProjectTest extends TestCase {
  public function test_one(): void {
    $project = new MidtermProject();

    $this->assertEquals(1, $project->item_one("A", str_split("Bereave")));
    $this->assertEquals(0, $project->item_one("Z", str_split("Practiced")));
    $this->assertEquals(2, $project->item_one("o", str_split("Calcivorous")));
    $this->assertEquals(1, $project->item_one("M", str_split("Outmaneuver")));
    $this->assertEquals(2, $project->item_one("H", str_split("Rhodophane")));
  }

  public function test_two(): void {
    $midterm = new MidtermProject();

    $this->assertTrue($midterm->item_two("racecar"));
    $this->assertTrue($midterm->item_two("Aibohphobia"));
    $this->assertTrue($midterm->item_two("Detartrated"));
    $this->assertTrue($midterm->item_two("Hannah"));
    $this->assertFalse($midterm->item_two("Pokemon"));
  }

  public function test_three(): void {
    $midterm = new MidtermProject();

    $this->assertEquals(3, $midterm->item_three([1, 2, 3]));
    $this->assertEquals("Roronoa", $midterm->item_three(["Naruto", "Sasuke", "Sakura", "Roronoa"]));
    $this->assertEquals(true, $midterm->item_three([true, false, true]));
    $this->assertEquals(55, $midterm->item_three([null, "x", 55]));
    $this->assertEquals(null, $midterm->item_three([true, 6, "a", null]));
  }

  public function test_four(): void {
    $midterm = new MidtermProject();

    $results = $midterm->item_four(["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"]);

    $this->assertEquals(["Z", "Y", "X", "W", "V", "U", "T", "S", "R", "Q", "P", "O", "N", "M", "L", "K", "J", "I", "H", "G", "F", "E", "D", "C", "B", "A"], $results);
  }

  public function test_five(): void {
    $midterm = new MidtermProject();

    $this->assertEquals([1, 2, 3, 4, 5], $midterm->item_five([1, 2, 3, 4, 5]));
    $this->assertEquals([1, 2, 3, 4, 5], $midterm->item_five([1, 2, 2, 3, 3, 3, 4, 5, 5]));
    $this->assertEquals([1], $midterm->item_five([1, 1, 1, 1, 1, 1]));
    $this->assertEquals([], $midterm->item_five([]));
    $this->assertEquals(["apple", "banana", "cherry", "durian"], $midterm->item_five(["apple", "banana", "cherry", "banana", "cherry", "cherry", "durian"]));
  }

  public function test_six(): void {
    $midterm = new MidtermProject();

    $this->assertTrue($midterm->item_six(61917364224));
    $this->assertTrue($midterm->item_six(5159780352));
    $this->assertTrue($midterm->item_six(429981696));
    $this->assertTrue($midterm->item_six(20736));
    $this->assertFalse($midterm->item_six(4648456498));
  }

  public function test_seven(): void {
    $midterm = new MidtermProject();

    $this->assertEquals([1, 3], $midterm->item_seven([1, 2, 3, 1, 1, 4, 5, 6, 7, 8, 9, 10]));
    $this->assertEquals([9, 4], $midterm->item_seven([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 9, 0, 0, 9, 9]));
    $this->assertEquals([2, 2], $midterm->item_seven([1, 2, 2, 3]));
    $this->assertEquals([0, 0], $midterm->item_seven([1, 2, 3, 4, 5]));
    $this->assertEquals([0, 5], $midterm->item_seven([0, 0, 0, 0, 0, 1, 2, 3, 4]));
  }

  public function test_eight(): void {
    $midterm = new MidtermProject();

    $this->assertEquals(".god yzal eht revo spmuj xof nworb kciuq ehT", $midterm->item_eight("The quick brown fox jumps over the lazy dog."));
    $this->assertEquals(".wov ym egduj ,ztrauq kcalb fo xnihpS", $midterm->item_eight("Sphinx of black quartz, judge my vow."));
    $this->assertEquals("!pmuj sarbez tfad kciuq ylgnixev woH", $midterm->item_eight("How vexingly quick daft zebras jump!"));
    $this->assertEquals(".ylkciuq pmuj sdraziw gnixob evif ehT", $midterm->item_eight("The five boxing wizards jump quickly."));
    $this->assertEquals(".drawrof nexo rieht gnivird tpek tub yltniauq detca seibmoz dedaJ", $midterm->item_eight("Jaded zombies acted quaintly but kept driving their oxen forward."));
  }

  public function test_nine(): void {
    $midterm = new MidtermProject();

    $results = $midterm->item_nine("Wayne", ["Wayne", "Ace", "George"]);

    $this->assertEquals(0, $results);
  }

  public function test_ten(): void {
    $midterm = new MidtermProject();

    $this->assertEquals(79, $midterm->item_ten([75, 80, 77, 85]));
    $this->assertEquals(82, $midterm->item_ten([75, 80, 83, 90]));
    $this->assertEquals(88, $midterm->item_ten([90, 83, 93, 87]));
  }

  /**
   * Test #11
   *
   * Given an array of users,
   * make a function that would take the user's username and password
   * and validate it from the given array of users.
   *
   */
  public function test_eleven() {
    $midterm = new MidtermProject();

    $users = [
      new Users("John", null, "Doe", "johndoe", "password123"),
      new Users("Sarah", "Jane", "Smith", "sarahsmith", "sarahsPassword"),
      new Users("Michael", "Joseph", "Brown", "mikebrown", "mikeB123!"),
      new Users("Emily", "Grace", "Lee", "emilylee", "emilysPassword"),
      new Users("David", "William", "Clark", "davidclark", "dclark12345"),
    ];

    $this->assertTrue($midterm->item_eleven($users));
  }

  public function test_twelve() {
    $midterm = new MidtermProject();

    $this->assertEquals("C:\WINDOWS\system32\cmd.exe", $midterm->item_twelve());
  }

  public function test_thirteen() {
    $midterm = new MidtermProject();

    $this->assertEquals("Backend Developer", $midterm->item_thirteen());
  }
}
