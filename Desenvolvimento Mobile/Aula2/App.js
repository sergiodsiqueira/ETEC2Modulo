import React, { useState } from 'react'
import {
  StyleSheet,
  Text,
  View,
  SafeAreaView,
  StatusBar,
  TextInput,
  TouchableOpacity
} from 'react-native'

export default function App() {
  const [altura, setAltura] = useState('')
  const [peso, setPeso] = useState('')

  function Calcular() {
    //calculo IMC
    alert(`Altura: ${altura}cm \nPeso: ${peso}kg`)
  }

  return (
    <SafeAreaView style={styles.container}>
      <StatusBar />

      <Text style={styles.titulo}>CALCULE SEU IMC</Text>

      {/*Campo texto ALTURA*/}
      <Text style={styles.lblAltura}>Altura</Text>
      <TextInput
        style={styles.input}
        placeholder="Altura (cm)"
        keyboardType="numeric"
        value={altura}
        onChangeText={altura => setAltura(altura)}
      />

      {/*Campo texto PESO*/}
      <Text style={styles.lblPeso}>Peso</Text>
      <TextInput
        style={styles.input}
        placeholder="Peso (kg)"
        keyboardType="numeric"
        value={peso}
        onChangeText={peso => setPeso(peso)}
      />

      {/*Botão*/}
      <TouchableOpacity style={styles.btnCalcular} onPress={Calcular()}>
        <Text style={styles.btnTCalcular}>CALCULAR</Text>
      </TouchableOpacity>
    </SafeAreaView>
  )
}

const styles = StyleSheet.create({
  container: {
    backgroundColor: 'orange',
    flex: 1,
    padding: 10
  },

  titulo: {
    textAlign: 'center',
    color: 'black',
    fontSize: 30,
    fontWeight: 'bold'
  },

  lblAltura: {
    color: 'white',
    fontSize: 15,
    fontWeight: 'bold'
  },

  lblPeso: {
    color: 'white',
    fontSize: 15,
    fontWeight: 'bold'
  },

  input: {
    marginBottom: 25,
    backgroundColor: 'white',
    borderRadius: 5,
    borderColor: 'red',
    fontSize: 30,
    height: 60
  },

  btnTCalcular: {
    color: 'white'
  },

  btnCalcular: {
    backgroundColor: 'purple',
    marginTop: 25,
    //padding: 10,
    justifyContent: 'center',
    //width: 100,
    borderRadius: 5,
    alignItems: 'center',
    height: 60
  }
})
