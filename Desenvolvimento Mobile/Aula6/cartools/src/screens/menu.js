import React, { useState } from 'react';
import { StyleSheet, SafeAreaView, View, Text, Card} from 'react-native';
import fonts from '../styles/fonts';

//Tela de Dashboard 
export function Menu() {
  return (
    <SafeAreaView style={styles.container}>
      <View style={styles.viewTitulo}>
        <Text style={styles.titulo}> ESCOLHA UMA OPÇÃO</Text>
      </View>

      <View style={styles.Opcao1}>

      </View>


    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: 'gray'
  },
  viewTitulo: {
    marginTop: 10
  },
  titulo: {
    textAlign: 'left',
    fontFamily: fonts.titulo,
    paddingLeft: 10
  }
});
