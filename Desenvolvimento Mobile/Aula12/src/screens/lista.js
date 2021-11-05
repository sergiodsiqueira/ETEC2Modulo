import { Button } from '@material-ui/core';
import React, { useState } from 'react';
import { StyleSheet, SafeAreaView, FlatList, Text, TouchableOpacity } from 'react-native';
import DATA from '../dados'

export function Lista() { 
  
  const dados = DATA;

  return (
    <SafeAreaView style={styles.container}>
      {dados.map((carro) => (
          <Text>{carro.modelo} - {carro.ano}</Text>
        ))} 
  
      <Button onClick = {() => {alert('Hello')}}>TESTE</Button>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: 'white',
    margin:10
  }
});
