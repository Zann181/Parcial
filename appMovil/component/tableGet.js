import React, { Component } from 'react';
import { StyleSheet, View, ScrollView } from 'react-native';
import { Table, TableWrapper, Row } from 'react-native-table-component';

export default class ExampleThree extends Component {
  constructor(props) {
    super(props);
    this.state = {
      tableHead: ['Head', 'Head2', 'Head3', 'Head4'],
      widthArr: [40, 60, 80, 100 ]
    }
  }

  render() {
    const state = this.state;
    const tableData = [];
    for (let i = 0; i < 3; i += 1) {
      const rowData = [];
      for (let j = 0; j < 9; j += 1) {
        rowData.push(`${i}${j}`);
      }
      tableData.push(rowData); //funcion para añadir a tabla
    }

    return (
      <View style={styles.container}>
        <ScrollView horizontal={true}>
          <View>
            <Table borderStyle={{borderWidth: 1, borderColor: '#C1C0B9'}}>
              <Row data={state.tableHead} widthArr={state.widthArr} style={[styles.header, {backgroundColor: '#4285F4'}]} textStyle={styles.textWhite}/>
            </Table>
            <ScrollView style={[styles.dataWrapper, { flex: 1 }]}>
              <Table borderStyle={{borderWidth: 1, borderColor: '#C1C0B9'}}>
                {
                  tableData.map((rowData, index) => (
                    <Row
                      key={index}
                      data={rowData}
                      widthArr={state.widthArr}
                      style={[styles.row, index%2 && {backgroundColor: '#F7F6E7'}]}
                      textStyle={styles.textBlack}
                    />
                  ))
                }
              </Table>
            </ScrollView>
          </View>
        </ScrollView>
      </View>
    )
  }
}

const styles = StyleSheet.create({
  container: { flex: 1, padding: 16, paddingTop: 30, backgroundColor: '#fff', borderBlockColor:'black' },
  header: { height: 50 },
  textWhite: { textAlign: 'center', fontWeight: '100', color: '#ffffff' },
  dataWrapper: { marginTop: -1 },
  row: { height: 40, backgroundColor: '#7ce9fc' },
  textBlack: { textAlign: 'center', fontWeight: '100', color: '#000000' },
});

