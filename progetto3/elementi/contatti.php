<div class="contatti mt-5 pt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <h2 class="text-center"> Contatti </h2>

            <form action="database.php" method="POST" autocomplete="off">

                <div class="nome">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control"
                        placeholder="Inserisci qui il tuo nome" required>
                </div>

                <div class="cognome">
                    <label for="cognome">Cognome</label>
                    <input type="text" name="cognome" id="cognome" class="form-control"
                        placeholder="Inserisci qui il tuo cognome" required>
                </div>

                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control"
                        placeholder="Inserisci qui la tua posta elettronica" required>
                </div>

                <div class="telefono">
                    <label for="telefono">Telefono</label>
                    <input type="number" name="telefono" id="telefono" class="form-control"
                        placeholder="Inserisci qui il tuo numero di telefono" required>
                </div>

                <div>
                    <label for="messaggio">Messaggio:</label>
                    <textarea name="messaggio" id="messaggio" class="form-control" cols="30" rows="5"
                        placeholder="Scrivi un messaggio..."></textarea>
                </div>

                <button class="btn btn-success mt-4">Invia Messaggio</button>
            </form>
        </div>
    </div>
</div>