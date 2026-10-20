<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Catégories</title>
        <style>
            :root {
                color: #172033;
                background: #f4f7fb;
                font-family: Arial, sans-serif;
            }

            body {
                margin: 0;
                padding: 3rem 1rem;
            }

            main {
                width: min(100%, 900px);
                margin: 0 auto;
            }

            h1 {
                margin: 0 0 1.5rem;
                color: #102a43;
                font-size: 2rem;
            }

            .table-wrapper {
                overflow-x: auto;
                background: #ffffff;
                border: 1px solid #d9e2ec;
                border-radius: 10px;
                box-shadow: 0 8px 24px rgb(16 42 67 / 8%);
            }

            table {
                width: 100%;
                border-collapse: collapse;
                text-align: left;
            }

            th,
            td {
                padding: 1rem 1.25rem;
                border-bottom: 1px solid #e6edf3;
            }

            th {
                color: #ffffff;
                background: #1769aa;
                font-size: 0.9rem;
                letter-spacing: 0.02em;
            }

            tbody tr:last-child td {
                border-bottom: 0;
            }

            tbody tr:hover {
                background: #f0f7ff;
            }

            .empty-state {
                color: #52606d;
                text-align: center;
            }

            @media (max-width: 600px) {
                body {
                    padding: 2rem 0.75rem;
                }

                th,
                td {
                    padding: 0.85rem;
                }
            }
        </style>
    </head>
    <body>
        <main>
            <h1>Liste des catégories</h1>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->desc ?: 'Aucune description' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td class="empty-state" colspan="2">Aucune catégorie disponible.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </body>
</html>
