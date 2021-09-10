import React, { useState } from 'react';
import { StyleSheet, Text, SafeAreaView, TextInput, KeyboardAvoidingView, Platform } from 'react-native';
import fonts from '../styles/fonts';

//Tela de Dashboard 
export function Menu() {

  const[temNome, setTemNome] = useState(false);

  function handleInputChange(value){
    setTemNome(!!value)
    console.log(!!value)
  }

  return (
    <SafeAreaView style={styles.container}>

        <KeyboardAvoidingView behavior={Platform.OS == 'ios'? 'padding':'height'}>
            <Text style={styles.texto}>
                DASHBOARD
            </Text>
            
            <Text style={styles.emoji}>
              {temNome?'😁':'😶'}
            </Text>

            <TextInput 
              style={styles.input} 
              placeholder="DIGITE SEU NOME"
              onChangeText={handleInputChange}
            />
        </KeyboardAvoidingView>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#81DC60',
    alignItems: 'center'
  },
  texto: {
    color: 'black',
    fontSize: 14,
    fontFamily: fonts.titulo,
    marginBottom: 20
  },
  emoji:{
    fontSize: 30,
    marginBottom: 10
  },
  input:{
    borderRadius: 30,
    borderColor: 'black',
    borderWidth: 1,
    paddingLeft: 8,
    padding: 5,
    fontFamily: fonts.normal
  }
});
