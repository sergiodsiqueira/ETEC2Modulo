import React, { useState } from 'react'
import {
  Text,
  View,
  TextInput,
  TouchableOpacity,
  Image,
  FlatList
} from 'react-native'
import styles from './styles'

export default function App() {
  //Tabela de Dados IMC
  const Dados = [
    {
      id: 1,
      classificacao: 'BAIXO PESO',
      valorimc: '<18,5',
      risco: 'INANIÇÃO'
    },
    {
      id: 2,
      classificacao: 'PESO NORMAL',
      valorimc: '18,6 á 24,9',
      risco: 'NENHUM'
    },
    {
      id: 3,
      classificacao: 'SOBREPESO',
      valorimc: '25 á 29,9',
      risco: 'NENHUM'
    },
    {
      id: 4,
      classificacao: 'OBESIDADE I',
      valorimc: '30 á 34,9',
      risco: 'MODERADO'
    },
    {
      id: 5,
      classificacao: 'OBESIDADE II',
      valorimc: '35 á 39,9',
      risco: 'ALTO'
    },
    {
      id: 6,
      classificacao: 'OBESIDADE III',
      valorimc: '>40',
      risco: 'MUITO GRAVE'
    }
  ]

  //Variaveis de Calculo e Mensagem
  const [altura, setAltura] = useState('')
  const [peso, setPeso] = useState('')
  const [msgImc, setMsgImc] = useState('PREENCHA PESO E ALTURA')
  const [txtbotao, setTxtBotao] = useState('CALCULAR')

  //Função de Calculo e tratamento da mensagem e botão
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
        <Image
          style={styles.Logo}
          source={{
            uri: 'https://image.flaticon.com/icons/png/512/1934/1934343.png'
          }}
        />
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

      {/*View Tabela ----------------------------------------------------------------*/}
      <View>
        {/*Tabela*/}
        <FlatList
          data={Dados}
          numColumns={3}
          keyExtractor={item => item.id}
          renderItem={({ item }) => {
            return (
              <View style={styles.item}>
                <Text style={styles.text}>{item.classificacao}</Text>
                <Text style={styles.text}>{item.valorimc}</Text>
                <Text style={styles.text}>{item.risco}</Text>
              </View>
            )
          }}
        />
      </View>
    </View>
  )
}
