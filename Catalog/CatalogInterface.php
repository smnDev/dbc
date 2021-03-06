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

use smn\lazyc\dbc\Catalog\OperatorInterface;

/**
 * La CatalogInterface espone solo due metodi per configurare il nome<br>
 * e ricavarne il suo valore
 *
 * @author Simone Esposito
 * @email simone.esposito1986@gmail.com
 * @license https://opensource.org/licenses/mit-license.html MIT License
 */
interface CatalogInterface {

    /**
     * Configura il nome dell'oggetto di catalogo
     * @param String $name Nome dell'oggetto di catalogo
     * @return self
     */
    public function setName(String $name);

    /**
     * Restituisce il nome dell'oggetto di catalogo
     * @return String
     */
    public function getName();
    
    /**
     * Aggiunge un Operator a l'oggetto di catalogo. L'operator è gestibile<br>
     * tramite il $name
     * @param String $name Nome dell'operator
     * @param OperatorInterface $operator Classe che implementa OperatorInterface
     * @return self
     */
    public function addOperator(String $name, OperatorInterface $operator);

    /**
     * Restituisce true o false se l'Operator con nome $name esiste
     * @param String $name Nome dell'operator
     * @return Bool
     */
    public function hasOperator($name);

    /**
     * Rimuove un operator con nome $name
     * @param String $name Nome dell'operator
     * @return self
     */
    public function removeOperator($name);

    /**
     * Restituisce l'operator precedentemente aggiunto con nome $name
     * @param String $name Nome dell'operator
     * @return Bool|OperatorInterface
     */
    public function getOperator($name);

    /**
     * Restituisce la lista di tutti gli operator aggiunti all'oggetto di<br>
     * catalogo
     * @return OperatorInterface[]
     */
    public function getOperators();
}
