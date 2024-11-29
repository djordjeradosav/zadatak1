<!DOCTYPE html>
<html lang="hr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CRM Sustav</title>
<style>
* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: Arial, sans-serif;
}

```
    body {
        background: #f0f2f5;
    }

    .navbar {
        background: #2c3e50;
        color: white;
        padding: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .main-container {
        display: flex;
        min-height: calc(100vh - 60px);
    }

    .sidebar {
        width: 250px;
        background: white;
        padding: 1rem;
        box-shadow: 2px 0 5px rgba(0,0,0,0.1);
    }

    .sidebar-menu {
        list-style: none;
    }

    .sidebar-menu li {
        padding: 0.8rem;
        cursor: pointer;
        border-radius: 5px;
        margin-bottom: 0.5rem;
    }

    .sidebar-menu li:hover {
        background: #f0f2f5;
    }

    .content {
        flex: 1;
        padding: 2rem;
    }

    .card {
        background: white;
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 1rem;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-bottom: 2rem;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
    }

    th, td {
        padding: 0.8rem;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .btn {
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        background: #3498db;
        color: white;
    }

    .btn:hover {
        background: #2980b9;
    }

    .search {
        padding: 0.5rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        width: 200px;
    }
</style>

```

</head>
<body>
<nav class="navbar">
<h1>CRM Sustav</h1>
<input type="text" class="search" placeholder="Pretraži...">
</nav>

```
<div class="main-container">
    <aside class="sidebar">
        <ul class="sidebar-menu">
            <li>📊 Nadzorna ploča</li>
            <li>👥 Klijenti</li>
            <li>💼 Prilike</li>
            <li>📅 Zadaci</li>
            <li>📈 Izvještaji</li>
            <li>⚙️ Postavke</li>
        </ul>
    </aside>

    <main class="content">
        <div class="stats">
            <div class="card">
                <h3>Ukupno klijenata</h3>
                <h2>124</h2>
            </div>
            <div class="card">
                <h3>Otvorene prilike</h3>
                <h2>45</h2>
            </div>
            <div class="card">
                <h3>Zadaci za danas</h3>
                <h2>8</h2>
            </div>
        </div>

        <div class="card">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h2>Nedavni klijenti</h2>
                <button class="btn">+ Novi klijent</button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Ime</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Zadnja aktivnost</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ana Horvat</td>
                        <td>ana@tvrtka.hr</td>
                        <td>Aktivan</td>
                        <td>Danas</td>
                    </tr>
                    <tr>
                        <td>Ivan Kovač</td>
                        <td>ivan@firma.hr</td>
                        <td>U pregovorima</td>
                        <td>Jučer</td>
                    </tr>
                    <tr>
                        <td>Marko Novak</td>
                        <td>marko@kompanija.hr</td>
                        <td>Novi lead</td>
                        <td>23.10.2024</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>

<script>
    // Dodavanje interaktivnosti za sidebar
    document.querySelectorAll('.sidebar-menu li').forEach(item => {
        item.addEventListener('click', function() {
            // Ukloni aktivnu klasu sa svih stavki
            document.querySelectorAll('.sidebar-menu li').forEach(i =>
                i.style.background = '');
            // Dodaj aktivnu klasu na kliknutu stavku
            this.style.background = '#f0f2f5';
        });
    });

    // Pretraživanje
    document.querySelector('.search').addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');

        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(searchTerm) ? '' : 'none';
        });
    });

    // Dodavanje novog klijenta
    document.querySelector('.btn').addEventListener('click', function() {
        alert('Otvori formu za novog klijenta');
        // Ovdje možete implementirati logiku za dodavanje novog klijenta
    });
</script>

```

</body>
</html>