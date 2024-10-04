<?php
$teamMembers = [
    [
        'name' => 'Kenneth Perez',
        'position' => 'Team Leader',
        'description' => "Kenneth is a fantastic team leader. He’s always clear about our goals, keeps us motivated, and makes sure we all communicate well. Plus, he handles any conflicts with ease, helping us stay focused and productive.",
        'image' => 'kenneth.jfif',
        'profileLink' => 'https://www.facebook.com/profile.php?id=100013606843911'
    ],
    [
        'name' => 'Angelo Miniano',
        'position' => 'Member',
        'description' => "He’s always engaged in meetings, shares useful ideas, and communicates clearly with everyone. He’s also really supportive, stepping in to help others whenever needed, and reliably gets his tasks done on time.",
        'image' => 'https://scontent.fmnl13-1.fna.fbcdn.net/v/t1.6435-9/32116516_454971068266277_7168647244223086592_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=13d280&_nc_eui2=AeFW3JhLA_S7lV6MNN5jQoRZgrm-kmYclpeCub6SZhyWl2CIarNJ5AStr9BiOzIPnwX7_I1jnRp0xpDGmB5Imehz&_nc_ohc=For0i1fBmloQ7kNvgEbpV1c&_nc_ht=scontent.fmnl13-1.fna&oh=00_AYBKtepozjVnzC0tsYa1r0gFhWcaOnoY-wiRCIxUimXvkA&oe=66EC390A',
        'profileLink' => 'https://www.facebook.com/minianoangelo05'
    ],
    [
        'name' => 'Adrian Atilano',
        'position' => 'Member',
        'description' => "He’s always involved in discussions, contributes valuable ideas, and keeps everyone updated. Plus, he’s really supportive, always ready to help out, and consistently meets his deadlines.",
        'image' => 'adrian.jfif',
        'profileLink' => 'https://www.facebook.com/100007965338896'
    ],
    [
        'name' => 'Danilo Raphael Bayais',
        'position' => 'Member',
        'description' => "He’s fully engaged in every project, offers creative insights, and keeps the team in the loop. His enthusiasm is contagious, he’s always there to lend a hand, and you can count on him to hit every deadline.",
        'image' => 'bayais.jfif',
        'profileLink' => 'https://www.facebook.com/danilo.bayais'
    ],
    [
        'name' => 'Glendelle Antonio Porlaje',
        'position' => 'Member',
        'description' => "Always proactive in meetings, Glendelle offers fresh perspectives and ensures everyone is on the same page. She’s quick to assist colleagues and consistently delivers high-quality work on schedule.",
        'image' => 'porlaje.jfif',
        'profileLink' => 'https://www.facebook.com/glendelleAntonioporlaje'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>team-profile</title>
    <style>
      body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-image: url('https://w0.peakpx.com/wallpaper/476/51/HD-wallpaper-triangle-solid-black-gold-laptop-full-background-and.jpg');
          color: #333;
          text-align: center;
          overflow: hidden;
      }
      header {
          background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPiCZFFL5usCcrfwSPa3QWv1TyeXOWRJKCYg&s');
          color: #333;
          padding: 20px;
          border-bottom: 3px solid hwb(#17b57e);
      }
      .team-profile {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          padding: 20px;
      }
      .profile {
          background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPiCZFFL5usCcrfwSPa3QWv1TyeXOWRJKCYg&s');
          border: 1px solid #ddd;
          border-radius: 8px;
          margin: 15px;
          padding: 20px;
          width: 220px;
          cursor: pointer;
          position: relative;
          z-index: 1;
          overflow: hidden;
          transition: transform 0.3s ease, box-shadow 0.3s ease, border 0.3s ease;
      }
      .profile:hover {
          transform: scale(1.05);
          box-shadow: 0 0 15px rgba(255, 255, 255, 0.6);
          border: 2px solid hsl(180, 100%, 75%);
      }
      .profile img {
          border-radius: 50%;
          width: 100px;
          height: 100px;
          object-fit: cover;
          border: 3px solid hsl(52, 92%, 45%);
          margin-bottom: 15px;
      }
      .profile h2 {
          margin: 10px 0;
          font-size: 18px;
          color: #000000;
      }
      .profile p {
          color: #040505;
          margin: 15px 0;
      }
      .modal {
          display: none;
          position: fixed;
          z-index: 2;
          padding-top: 100px;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          overflow: auto;
          background-color: rgba(0,0,0,0.4);
      }
      .modal-content {
          background-color: #fefefe;
          margin: auto;
          padding: 20px;
          border: 1px solid #888;
          width: 80%;
          max-width: 500px;
          border-radius: 8px;
      }
      .close {
          color: #aaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
      }
      .close:hover,
      .close:focus {
          color: black;
          text-decoration: none;
          cursor: pointer;
      }
      footer {
          background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPiCZFFL5usCcrfwSPa3QWv1TyeXOWRJKCYg&s');
          color: black;
          padding: 10px;
          border-top: 3px solid #388E3C;
          position: fixed;
          width: 100%;
          bottom: 0;
      }
      .neon-circle {
           position: absolute;
           border-radius: 50%;
           width: 100px;
           height: 100px;
           pointer-events: none;
           z-index: 0;
           background: radial-gradient(circle, rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0) 70%);
           transition: transform 0.2s ease;
           transform: scale(0.5);
           opacity: 0.8;
       }
      @keyframes pulse {
          0% {
              transform: scale(0.5);
              opacity: 1;
          }
          100% {
              transform: scale(2.5);
              opacity: 0;
          }
      }
  </style>
</head>
<body>
    <header>
        <h1>WE ARE GROUP 1</h1>
    </header>
    <div class="team-profile">
         <?php foreach ($teamMembers as $member): ?>
             <div class="profile" onclick="openModal('<?= htmlspecialchars($member['name']) ?>')">
                 <img src="<?= htmlspecialchars($member['image']) ?>" alt="<?= htmlspecialchars($member['name']) ?>">
                 <h2><?= htmlspecialchars($member['name']) ?></h2>
                 <p><?= htmlspecialchars($member['position']) ?></p>
             </div>

             <div id="<?= htmlspecialchars($member['name']) ?>-modal" class="modal">
                 <div class="modal-content">
                     <span class="close" onclick="closeModal('<?= htmlspecialchars($member['name']) ?>')">&times;</span>
                     <img src="<?= htmlspecialchars($member['image']) ?>" alt="<?= htmlspecialchars($member['name']) ?>" style="width:100px; height:100px; border-radius:50%;">
                     <h2><?= htmlspecialchars($member['name']) ?></h2>
                     <p><strong><?= htmlspecialchars($member['position']) ?></strong></p>
                     <p><?= htmlspecialchars($member['description']) ?></p>
                     <a href="<?= htmlspecialchars($member['profileLink']) ?>" target="_blank" rel="noopener noreferrer">View Full Profile</a>
                 </div>
             </div>
         <?php endforeach; ?>
     </div>
    <footer>
        <p>&copy; 2024 Group Team Assessment</p>
    </footer>

    <script>
        function openModal(memberName) {
            document.getElementById(memberName + '-modal').style.display = "block";
        }

        function closeModal(memberName) {
            document.getElementById(memberName + '-modal').style.display = "none";
        }

        window.onclick = function(event) {
            const modals = document.getElementsByClassName('modal');
            for (let i = 0; i < modals.length; i++) {
                if (event.target == modals[i]) {
                    modals[i].style.display = "none";
                }
            }
        }

        const colors = ['#FF007F', '#00FF7F', '#7F00FF', '#FF7F00', '#00FFFF', '#FF00FF'];

        document.addEventListener('mousemove', (e) => {
            const neonCircle = document.createElement('div');
            neonCircle.classList.add('neon-circle');

            const color = colors[Math.floor(Math.random() * colors.length)];
            neonCircle.style.background = `radial-gradient(circle, ${color}80, transparent 70%)`;

            neonCircle.style.top = `${e.clientY - 50}px`;
            neonCircle.style.left = `${e.clientX - 50}px`;
            document.body.appendChild(neonCircle);

            setTimeout(() => {
                neonCircle.remove();
            }, 500);
        });
    </script>
</body>
</html>
