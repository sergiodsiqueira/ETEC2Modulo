import React, { useState } from 'react'
import { Text, View, TextInput, TouchableOpacity } from 'react-native'
import styles from './styles'

export default function App() {
  const [altura, setAltura] = useState('')
  const [peso, setPeso] = useState('')
  const [msgImc, setMsgImc] = useState('PREENCHA PESO E ALTURA')
  const [txtbotao, setTxtBotao] = useState('CALCULAR')

  function Calcular() {
    if (altura != '' && peso != '') {
      setMsgImc(
        `Seu é IMC: ${(
          parseFloat(peso) /
          (parseFloat(altura / 100) * parseFloat(altura / 100))
        ).toFixed(2)}`
      )
      setTxtBotao('CALCULAR NOVAMENTE')
      setPeso('')
      setAltura('')
      return
    }

    setAltura('')
    setPeso('')
    setTxtBotao('CALCULAR')
    setMsgImc('PREENCHA PESO E ALTURA')
  }

  return (
    <View style={styles.container}>
      {/*View Titulo ------------------------------------------------------------*/}
      <View style={styles.viewTitulo}>
        <Text style={styles.titulo}>CALCULE SEU IMC</Text>
      </View>

      {/*View (Inputs, Texts) ---------------------------------------------------*/}
      <View>
        {/*Campo texto ALTURA*/}
        <Text style={styles.lblInputs}>Altura</Text>
        <TextInput
          style={styles.input}
          placeholder="Altura (cm)"
          keyboardType="numeric"
          value={altura}
          onChangeText={altura => setAltura(altura)}
        />
        {/*Campo texto PESO*/}
        <Text style={styles.lblInputs}>Peso</Text>
        <TextInput
          style={styles.input}
          placeholder="Peso (kg)"
          keyboardType="numeric"
          value={peso}
          onChangeText={peso => setPeso(peso)}
        />
        {/*Botão*/}
        <TouchableOpacity style={styles.btnCalcular} onPress={Calcular}>
          <Text style={styles.txtbtnCalcular}>{txtbotao}</Text>
        </TouchableOpacity>
      </View>

      {/*View Resultado -------------------------------------------------------------*/}
      <View>
        {/*Campo texto Resultado IMC*/}
        <Text style={styles.lblResultado}>{msgImc}</Text>
      </View>
    </View>
  )
}
