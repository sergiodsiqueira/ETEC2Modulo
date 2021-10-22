import React, { useState } from 'react';
import { StyleSheet, SafeAreaView, FlatList, Text, TouchableOpacity } from 'react-native';
import fonts from '../styles/fonts';
import { useNavigation } from '@react-navigation/core';
import { CustomBtn } from '../components/customBtn';

const DATA = [
  {
    id: 1,
    modelo: 'CIVIC',
    ano: 2009
  },
  {
    id: 2,
    modelo: 'CORSA',
    ano: 1999
  },
  {
    id: 3,
    modelo: 'JETTA',
    ano: 2020
  },
  {
    id: 4,
    modelo: 'COROLLA',
    ano: 2020
  }
];

const Item = ({modelo, ano, onPress, backgroundColor}) => (
  <TouchableOpacity style={[styles.item, backgroundColor]} onPress={onPress}> 
    <Text>Mod.: {modelo} - Ano: {ano}</Text>
  </TouchableOpacity>
);


export function Grid() {
  const navigation = useNavigation();
  function handleMenu(){
    navigation.navigate('Menu')
  }

  const [selectedId, setSelectedId] = useState(null)

  const renderItem = ({item}) =>{
    const backgroundColor = item.id == selectedId ? 'gray' : 'orange';
    return(
    <Item 
      modelo={item.modelo} 
      ano={item.ano} 
      onPress={()=>setSelectedId(item.id)}
      backgroundColor={{backgroundColor}}
    />)
  }
  
  return (
    <SafeAreaView style={styles.container}>
        <FlatList 
          data={DATA}
          renderItem={renderItem}
          keyExtractor={item => item.id}
          numColumns={2}
        />

        <CustomBtn 
          onPress = {handleMenu}
          textStyle = {{color:'white'}}
          textButton = 'MENU'
       />
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: 'white',
    margin:10
  },
  item:{
    backgroundColor: 'gray',
    padding: 16,
    margin: 8,
    flexGrow: 1,
    flexBasis: 0,    
  },
  text:{
    fontFamily: fonts.normal,
    fontSize: 16
  }
});
