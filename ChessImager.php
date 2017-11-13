<?php

require_once("./ChessImagerUtils.php");

if (isset($_GET['fen'])) {
  $pieceArray = parseFenString($_GET['fen']);
  $direction = getBoardDirection();
  $board = makeBoardImage($direction);

  for ($square = 0; $square < 64; $square++) {
    mergePiece($board, $pieceArray[$square], $square, $direction);
  }

  sendImage($board);
}
?>