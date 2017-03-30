# Bowling Game Kata

## Context

Scoring Bowling: The game consists of 10 frames as shown above.  In each frame the player has two opportunities to knock down 10 pins.  The score for the frame is the total number of pins knocked down, plus bonuses for strikes and spares.

A spare is when the player knocks down all 10 pins in two tries.  The bonus for that frame is the number of pins knocked down by the next roll.  So in frame 3 above, the score is 10 (the total number knocked down) plus a bonus of 5 (the number of pins knocked down on the next roll.)

A strike is when the player knocks down all 10 pins on his first try.  The bonus for that frame is the value of the next two balls rolled.

In the tenth frame a player who rolls a spare or strike is allowed to roll the extra balls to complete the frame.  However no more than three balls can be rolled in tenth frame.

## Level
Easy / 40 minutes

## Requirements
Write a class named “Game” that has two methods:
roll(pins : int) is called each time the player rolls a ball.  The argument is the number of pins knocked down.
score() : int is called only at the very end of the game.  It returns the total score for that game.
Goal
Resolve applying TDD, 100% code coverage is possible. When finish, comment on this post with your GitHub repository (or similiar) solution so others can check.

## Origin
Kata from [butunclebob.com](http://butunclebob.com/ArticleS.UncleBob.TheBowlingGameKata) <br>
Adapted by [carlosbuenosvinos.com](https://carlosbuenosvinos.com/kata-bowling-game/) 