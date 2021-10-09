import React, { useState, useEffect } from 'react';
import { StyleSheet, SafeAreaView, FlatList, ActivityIndicator } from 'react-native';
import fonts from '../styles/fonts';
import { CustomBtn } from '../components/customBtn';
import { CustomEdt } from '../components/customEdt';

export function Principal() { 
  
  const [load, setLoad] = useState(false);
  const [dados, setDados] = useState('');

  console.log(dados);

  useEffect(() => {
    setLoad(true);
    fetch('https://api.postmon.com.br/v1/cep/13990000')
      .then((response) => response.json())
      .then((json) => {setDados(json.estado_info)})
      .catch((error) => console.error(error))
      .finally(() => {setLoad(false)});
  }, '');
  
  
  return (
    <SafeAreaView style={[styles.container]}>
        { 
        load ? <ActivityIndicator/> : (
            <FlatList
            data={dados}
            keyExtractor={item => item.codigo_ibge}
            renderItem={({ item }) => (
              <Text>{item.codigo_ibge}</Text>
            )}
          />
          )
        }



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
