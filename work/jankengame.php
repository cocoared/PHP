<script lang="javascript">
  function submitUserHand(hand){
    document.querySelector("#user_hand").value = hand;
    document.querySelector("#select_hand_form").submit();
  }
</script>
<div class= "container">
  <div>
    <div class="text-danger">xxxさんの勝ち</div>
    <div class="text-success">n回のうち、n回勝ちました！</div>
  </div>
<div class=d-flex justify-content-center align-items-center flex-column mt-2">
  <div class="border rounded p-3 mt-2">
    <img src="img/janken_choki.png" width="100" class="rounded" />
</div>
</div>
</div>