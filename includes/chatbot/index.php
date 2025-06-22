<div id="chatbot">
  <div class="popup-box chat-popup">
    <div class="chatbot-wrapper">
      <div class="popup-head">
        <div class="botInfo-wrapper">
          <img src="https://i.pinimg.com/originals/ec/6c/85/ec6c85439ea5235614deaaa2f12f4335.png" alt="ai-bot" class="botImage" />
          <div class="AIBotInfo">
            <div class="title">AiBot</div>
            <div class="description">Know more about us...</div>
          </div>

        </div>
      </div>
      <div class="chatArea">
        <div class="popup-messages">Hi</div>
        <div class="popup-footer">

          <!-- <input id="textInput" class="input-box" type="text" name="msg" placeholder="Tap 'Enter' to send a message">
          <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"></i> -->
          <div class="chat-container">
            <div class="chat-box" id="chatBox"></div>
            <input type="text" id="userInput" placeholder="Ask me anything..." />
            <!-- <button onclick="sendMessage()">Send</button> -->
          </div>
                
        </div>
      </div>
    </div>
  </div>
  <div class="floating-logo" id="floating-button">
    <div></div>
  </div>
</div>



 <script>


    let button = document.getElementById("floating-button");
    button.addEventListener("click", function () {
      this.classList.toggle("active");
      var content = this.previousElementSibling;
      content.classList.toggle("popup-box-on");



  function sendMessage() {
  const userInput = document.getElementById("userInput").value;
  const chatBox = document.getElementById("chatBox");

  chatBox.innerHTML += "<div><strong>You:</strong> " + userInput + "</div>";

  fetch("chatbot-api.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: "message=" + encodeURIComponent(userInput)
  })
  .then(res => res.text())
  .then(response => {
    chatBox.innerHTML += "<div><strong>Bot:</strong> " + response + "</div>";
    chatBox.scrollTop = chatBox.scrollHeight;
  });

  document.getElementById("userInput").value = "";
}
});

 </script>


<style>
    html {
  scroll-behavior: smooth;
  font-family: Helvetica, sans-serif, Arial;
}
body {
  margin: 0 auto;
  background-color: #222;
}
#chatbot {
  .floating-logo {
    box-shadow: 4px 4px 8px 0 rgb(0 0 0 / 20%), 4px 6px 20px 0 rgb(0 0 0 / 19%);
    height: 50px;
    width: 50px;
    bottom: 50px;
    right: 50px;
    position: fixed;
    border-radius: 50%;
    cursor: pointer;
    overflow: hidden;
    background-color: #fff;
    z-index: 1;

    div {
      background-repeat: no-repeat;
      background-position: 50% 50%;
      height: 50px;
      width: 50px;
      display: block;
      vertical-align: middle;
      background-image: url(https://i.pinimg.com/originals/ec/6c/85/ec6c85439ea5235614deaaa2f12f4335.png);
      background-size: cover;
      animation: rotateLeft 0.5s linear;
    }

    &.active > div {
      background-image: url(https://chatwidget.dashboard-visor.com/public/images/close_icon.svg);
      background-size: 50%;
      animation: rotateRight 0.5s linear;
    }
  }

  .popup-box {
    box-shadow: 4px 4px 8px 0 rgb(0 0 0 / 20%), 4px 6px 20px 0 rgb(0 0 0 / 19%);
    background-color: #f2f2f2;
    border-radius: 10px;
    bottom: 111px;
    height: 40px;
    display: none;
    position: fixed;
    right: 50px;
    width: 200px;

    &.chat-popup {
      display: block !important;
      pointer-events: none;
      opacity: 0;
      z-index: 5;
      overflow: hidden;
      width: 0;
      transition: width 0.5s, height 0.5s, all 250ms linear;
    }
    &.popup-box-on {
      pointer-events: all;
      opacity: 1;
      width: 350px;
      height: 450px;
    }
    .chatArea {
      position: absolute;
      bottom: 0;
      left: 0;
      scroll-behavior: smooth;
      hyphens: auto;
      width: 100%;
    }
    .popup-head {
      background-color: #e54e8c;
      height: 80px;
      color: #fff;
      font-size: 16px;
      width: 100%;
      align-items: center;
      cursor: pointer;
      .botInfo-wrapper {
        display: flex;
        padding: 10px 15px;
        .botImage {
          height: 45px;
          width: 45px;
          border-radius: 50%;
          border: 2px solid #fff;
          object-fit: cover;
          margin: 5px 10px 10px 0;
        }
        .AIBotInfo {
          margin: 10px 0;
          .title {
            font-weight: 600;
            margin-bottom: 5px;
          }
        }
      }
    }
    .popup-footer {
      display: flex;
      float: left;
      box-sizing: border-box;
      justify-content: space-between;
      width: 100%;
      align-items: center;
      background-color: rgb(235, 235, 235);
      border-radius: 10px 10px 0px 0px;
      padding: 10px 0px 10px 10px;
      .input-box {
        width: 90%;
        float: left;
        border: none;
        box-sizing: border-box;
        border-radius: 10px;
        padding: 10px;
        font-size: 16px;
        color: #000;
        background-color: white;
        outline: none;
      }
      #chat-icon {
        width: 10%;
        text-align: center;
        padding: 0 5px;
        cursor: pointer;
        transition: 0.5s ease;
        &:hover {
          color: #e54e8c !important;
          transform: scale(1.3);
        }
      }
    }
  }
}

@keyframes rotateLeft {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
@keyframes rotateRight {
  from {
    transform: rotate(360deg);
  }
  to {
    transform: rotate(0deg);
  }
}

</style>



<?php
// Replace with your OpenRouter API key
$apiKey = "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";

// $userMessage = $_POST['message'];

$data = [
    "model" => "openai/gpt-3.5-turbo", // or try "anthropic/claude-3-haiku"
    "messages" => [
        ["role" => "system", "content" => "You are a helpful boat booking assistant."],
        // ["role" => "user", "content" => $userMessage]
    ]
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://openrouter.ai/api/v1/chat/completions");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $apiKey",
    "Content-Type: application/json",
    "HTTP-Referer: https://yourdomain.com",  // Optional but recommended
    "X-Title: BoatBookingBot"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);
curl_close($ch);

$responseData = json_decode($response, true);
echo $responseData['choices'][0]['message']['content'] ?? "Bot: Error getting response.";
?>



<?php require "includes/chatbot/index.php" ;?>
