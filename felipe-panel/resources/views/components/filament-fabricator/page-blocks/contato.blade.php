@aware(['page'])
<div class="section contact" id="contact">
    <div class="contact-left">
        <div class="contact-left-content">
            <div class="contact-left-title">
                <h2 class="title">Contato</h2>
            </div>
            <form class="form-group" id="contactForm" action="">
                <div class="input-group">
                    <input name="name" id="name" type="text" placeholder="Seu nome">
                    <label for="name">Nome</label>
                </div>
                <div class="input-group">
                    <input name="subject" id="subject" type="text" placeholder="Assunto da mensagem">
                    <label for="subject">Assunto</label>
                </div>
                <div class="input-group text-area">
                    <textarea name="message" id="message" cols="30" rows="10" maxlength="250"
                        placeholder="Mensagem"></textarea>
                    <label for="message">Mensagem</label>
                </div>
                <div class="buttons-row">
                    <div class="button-wrap-left">
                        <a class="whats" href="https://whatsa.me/5551997437606/?t=Oi%20me%20chamo%20Gabriel%20Teste%20de%20mensagem">Whats</a>
                        {{-- <button class="whats" id="whats" type="submit" value="{{$page->blocks[0]['data']['phone']}}"><i class="fab fa-whatsapp"></i>
                            Whats</button> --}}
                    </div>

                    {{-- <div class="button-wrap-right">
                        <button class="email" id="email" type="submit"><i class="fas fa-envelope"></i>
                            Email</button>
                    </div> --}}
                </div>
            </form>
        </div>
    </div>
    
    <div class="contact-right">
        <div class="contact-right-content">
            <div class="contact-right-title">
                <h2 class="title">Localização</h2>
            </div>
            <div id="map" class="map">
                {!!$rawMap!!}
            </div>
            <script>
                function mapConverter(){
                    let map = document.getElementById('map').children[0]
                    map.attributes.width.value = '100%'
                    map.attributes.height.value = '100%'
                }
                mapConverter()
            </script>
            <div class="map-legend">
                <span class="span">{{$address}}</span>
            </div>
        </div>
    </div>
</div>