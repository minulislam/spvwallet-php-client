<?php
// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: api.proto

namespace Pb;

interface APIService extends \Lv\Grpc\Service
{
    function Stop(\Pb\Empty $request) : \Pb\Empty;
    function CurrentAddress(\Pb\KeySelection $request) : \Pb\Address;
    function NewAddress(\Pb\KeySelection $request) : \Pb\Address;
    function ChainTip(\Pb\Empty $request) : \Pb\Height;
    function Balance(\Pb\Empty $request) : \Pb\Balances;
    function MasterPrivateKey(\Pb\Empty $request) : \Pb\Key;
    function MasterPublicKey(\Pb\Empty $request) : \Pb\Key;
    function HasKey(\Pb\Address $request) : \Pb\BoolResponse;
    function Params(\Pb\Empty $request) : \Pb\NetParams;
    function Transactions(\Pb\Empty $request) : \Pb\TransactionList;
    function GetTransaction(\Pb\Txid $request) : \Pb\Tx;
    function GetFeePerByte(\Pb\FeeLevelSelection $request) : \Pb\FeePerByte;
    function Spend(\Pb\SpendInfo $request) : \Pb\Txid;
    function BumpFee(\Pb\Txid $request) : \Pb\Txid;
    function Peers(\Pb\Empty $request) : \Pb\PeerList;
    function AddWatchedScript(\Pb\Address $request) : \Pb\Empty;
    function GetConfirmations(\Pb\Txid $request) : \Pb\Confirmations;
    function SweepAddress(\Pb\SweepInfo $request) : \Pb\Txid;
    function ReSyncBlockchain(\Google\Protobuf\Timestamp $request) : \Pb\Empty;
    function CreateMultisigSignature(\Pb\CreateMultisigInfo $request) : \Pb\SignatureList;
    function Multisign(\Pb\MultisignInfo $request) : \Pb\RawTx;
    function EstimateFee(\Pb\EstimateFeeData $request) : \Pb\Fee;
    function GetKey(\Pb\Address $request) : \Pb\Key;
    function ListKeys(\Pb\Empty $request) : \Pb\Keys;
    function ListAddresses(\Pb\Empty $request) : \Pb\Addresses;
    function WalletNotify(\Pb\Empty $request) : \Pb\Tx;
    function DumpHeaders(\Pb\Empty $request) : \Pb\Header;
}
