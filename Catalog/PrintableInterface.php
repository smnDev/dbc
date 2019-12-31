<?php

/*
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 * 
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCL  UDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 * 
 */

namespace smn\lazyc\dbc\Catalog;

/**
 * L'interfaccia PrintableInterface espone metodi per gestire un pattern con<br>
 * relativi placeholder.<br>
 * Il metodo toString() stampa l'oggetto sostituendo i placeholder
 *
 * @author Simone Esposito
 * @email simone.esposito1986@gmail.com
 * @license https://opensource.org/licenses/mit-license.html MIT License
 */
interface PrintableInterface {

    /**
     * Configura il pattern
     * @param String $pattern
     * @return self
     */
    public function setPattern($pattern);

    /**
     * Restituisce il pattern. Se $use_map è false, non rimappa i placeholder
     * @param Bool $use_map
     * @return String
     */
    public function getPattern($use_map = true);

    /**
     * Renderizza la stringa
     * @return String
     */
    public function toString();

    /**
     * Aggiunge un placeholder
     * @param String $name
     * @param String $value
     * @return self
     */
    public function addPlaceHolder($name, $value);

    /**
     * Rimuove un placeholder
     * @param String $name
     * @return self
     */
    public function removePlaceHolder($name);

    /**
     * Restituisce true o false se un placeholder esiste
     * @param String $name
     * @return bool
     */
    public function hasPlaceHolder($name);

    /**
     * Restituisce il valore del placeholder $name
     * @param String $name
     * @return String|bool
     */
    public function getPlaceHolder($name);

    /**
     * Restituisce tutti i placeholder. Se $use_map è false, non aggiunge il prefisso
     * ai placeholder
     * @param bool $use_map
     * @return Array
     */
    public function getPlaceHolders($use_map = true);

    /**
     * Cancella tutti i placeholder
     * @return self
     */
    public function cleanPlaceHolder();
}
